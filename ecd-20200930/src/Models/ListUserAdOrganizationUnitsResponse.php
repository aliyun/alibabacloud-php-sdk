<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ListUserAdOrganizationUnitsResponse\OUNames;
use AlibabaCloud\Tea\Model;

class ListUserAdOrganizationUnitsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var OUNames[]
     */
    public $OUNames;
    protected $_name = [
        'requestId' => 'RequestId',
        'OUNames'   => 'OUNames',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('OUNames', $this->OUNames, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->OUNames) {
            $res['OUNames'] = [];
            if (null !== $this->OUNames && \is_array($this->OUNames)) {
                $n = 0;
                foreach ($this->OUNames as $item) {
                    $res['OUNames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserAdOrganizationUnitsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OUNames'])) {
            if (!empty($map['OUNames'])) {
                $model->OUNames = [];
                $n              = 0;
                foreach ($map['OUNames'] as $item) {
                    $model->OUNames[$n++] = null !== $item ? OUNames::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
