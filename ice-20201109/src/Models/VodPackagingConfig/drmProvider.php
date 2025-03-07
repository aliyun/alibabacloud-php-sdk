<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\VodPackagingConfig;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptionMethod) {
            $res['EncryptionMethod'] = $this->encryptionMethod;
        }
        if (null !== $this->IV) {
            $res['IV'] = $this->IV;
        }
        if (null !== $this->systemIds) {
            $res['SystemIds'] = $this->systemIds;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return drmProvider
     */
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
                $model->systemIds = $map['SystemIds'];
            }
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
