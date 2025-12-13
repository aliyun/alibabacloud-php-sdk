<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\Dara\Model;

class RunContractExtractShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $fieldsToExtractShrink;

    /**
     * @var string
     */
    public $fileOssUrl;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appId' => 'appId',
        'fieldsToExtractShrink' => 'fieldsToExtract',
        'fileOssUrl' => 'fileOssUrl',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->fieldsToExtractShrink) {
            $res['fieldsToExtract'] = $this->fieldsToExtractShrink;
        }

        if (null !== $this->fileOssUrl) {
            $res['fileOssUrl'] = $this->fileOssUrl;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['fieldsToExtract'])) {
            $model->fieldsToExtractShrink = $map['fieldsToExtract'];
        }

        if (isset($map['fileOssUrl'])) {
            $model->fileOssUrl = $map['fileOssUrl'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
