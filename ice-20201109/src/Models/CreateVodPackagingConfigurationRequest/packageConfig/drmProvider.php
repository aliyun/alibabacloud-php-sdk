<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingConfigurationRequest\packageConfig;

use AlibabaCloud\Dara\Model;

class drmProvider extends Model
{
    /**
     * @var string
     */
    public $encryptionMethod;
    /**
     * @var string
     */
    public $IV;
    /**
     * @var string[]
     */
    public $systemIds;
    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'encryptionMethod' => 'EncryptionMethod',
        'IV'               => 'IV',
        'systemIds'        => 'SystemIds',
        'url'              => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->systemIds)) {
            Model::validateArray($this->systemIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptionMethod) {
            $res['EncryptionMethod'] = $this->encryptionMethod;
        }

        if (null !== $this->IV) {
            $res['IV'] = $this->IV;
        }

        if (null !== $this->systemIds) {
            if (\is_array($this->systemIds)) {
                $res['SystemIds'] = [];
                $n1               = 0;
                foreach ($this->systemIds as $item1) {
                    $res['SystemIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['EncryptionMethod'])) {
            $model->encryptionMethod = $map['EncryptionMethod'];
        }

        if (isset($map['IV'])) {
            $model->IV = $map['IV'];
        }

        if (isset($map['SystemIds'])) {
            if (!empty($map['SystemIds'])) {
                $model->systemIds = [];
                $n1               = 0;
                foreach ($map['SystemIds'] as $item1) {
                    $model->systemIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
