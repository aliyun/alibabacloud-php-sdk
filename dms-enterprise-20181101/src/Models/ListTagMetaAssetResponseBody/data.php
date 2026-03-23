<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTagMetaAssetResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $metaEntityAttrs;

    /**
     * @var string
     */
    public $metaType;
    protected $_name = [
        'metaEntityAttrs' => 'MetaEntityAttrs',
        'metaType' => 'MetaType',
    ];

    public function validate()
    {
        if (\is_array($this->metaEntityAttrs)) {
            Model::validateArray($this->metaEntityAttrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metaEntityAttrs) {
            if (\is_array($this->metaEntityAttrs)) {
                $res['MetaEntityAttrs'] = [];
                foreach ($this->metaEntityAttrs as $key1 => $value1) {
                    $res['MetaEntityAttrs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->metaType) {
            $res['MetaType'] = $this->metaType;
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
        if (isset($map['MetaEntityAttrs'])) {
            if (!empty($map['MetaEntityAttrs'])) {
                $model->metaEntityAttrs = [];
                foreach ($map['MetaEntityAttrs'] as $key1 => $value1) {
                    $model->metaEntityAttrs[$key1] = $value1;
                }
            }
        }

        if (isset($map['MetaType'])) {
            $model->metaType = $map['MetaType'];
        }

        return $model;
    }
}
