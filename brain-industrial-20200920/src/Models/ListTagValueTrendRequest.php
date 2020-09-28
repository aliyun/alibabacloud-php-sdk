<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListTagValueTrendRequest\pidTag;
use AlibabaCloud\Tea\Model;

class ListTagValueTrendRequest extends Model
{
    /**
     * @var string
     */
    public $pidProjectId;

    /**
     * @var pidTag[]
     */
    public $pidTag;
    protected $_name = [
        'pidProjectId' => 'PidProjectId',
        'pidTag'       => 'PidTag',
    ];

    public function validate()
    {
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
        Model::validateRequired('pidTag', $this->pidTag, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->pidTag) {
            $res['PidTag'] = [];
            if (null !== $this->pidTag && \is_array($this->pidTag)) {
                $n = 0;
                foreach ($this->pidTag as $item) {
                    $res['PidTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagValueTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['PidTag'])) {
            if (!empty($map['PidTag'])) {
                $model->pidTag = [];
                $n             = 0;
                foreach ($map['PidTag'] as $item) {
                    $model->pidTag[$n++] = null !== $item ? pidTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
