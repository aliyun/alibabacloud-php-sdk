<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppCommoditySpecificationsForPartnerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ModuleVersionsValue;

class module extends Model
{
    /**
     * @var ModuleVersionsValue[]
     */
    public $versions;
    protected $_name = [
        'versions' => 'Versions',
    ];

    public function validate()
    {
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['Versions'] = [];
                foreach ($this->versions as $key1 => $value1) {
                    $res['Versions'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = [];
                foreach ($map['Versions'] as $key1 => $value1) {
                    $model->versions[$key1] = ModuleVersionsValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
