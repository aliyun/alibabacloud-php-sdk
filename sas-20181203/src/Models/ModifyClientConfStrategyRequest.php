<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyClientConfStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $tag;
    /**
     * @var string
     */
    public $tagExt;
    /**
     * @var string
     */
    public $tagValue;
    /**
     * @var string
     */
    public $uuid;
    /**
     * @var string[]
     */
    public $uuids;
    protected $_name = [
        'tag'      => 'Tag',
        'tagExt'   => 'TagExt',
        'tagValue' => 'TagValue',
        'uuid'     => 'Uuid',
        'uuids'    => 'Uuids',
    ];

    public function validate()
    {
        if (\is_array($this->uuids)) {
            Model::validateArray($this->uuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->tagExt) {
            $res['TagExt'] = $this->tagExt;
        }

        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->uuids) {
            if (\is_array($this->uuids)) {
                $res['Uuids'] = [];
                $n1           = 0;
                foreach ($this->uuids as $item1) {
                    $res['Uuids'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['TagExt'])) {
            $model->tagExt = $map['TagExt'];
        }

        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = [];
                $n1           = 0;
                foreach ($map['Uuids'] as $item1) {
                    $model->uuids[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
