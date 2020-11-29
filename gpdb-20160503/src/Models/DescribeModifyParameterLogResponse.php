<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogResponse\changelogs;
use AlibabaCloud\Tea\Model;

class DescribeModifyParameterLogResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var changelogs[]
     */
    public $changelogs;
    protected $_name = [
        'requestId'  => 'RequestId',
        'changelogs' => 'Changelogs',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('changelogs', $this->changelogs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->changelogs) {
            $res['Changelogs'] = [];
            if (null !== $this->changelogs && \is_array($this->changelogs)) {
                $n = 0;
                foreach ($this->changelogs as $item) {
                    $res['Changelogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeModifyParameterLogResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Changelogs'])) {
            if (!empty($map['Changelogs'])) {
                $model->changelogs = [];
                $n                 = 0;
                foreach ($map['Changelogs'] as $item) {
                    $model->changelogs[$n++] = null !== $item ? changelogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
