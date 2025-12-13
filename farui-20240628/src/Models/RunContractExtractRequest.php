<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractExtractRequest\fieldsToExtract;

class RunContractExtractRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var fieldsToExtract[]
     */
    public $fieldsToExtract;

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
        'fieldsToExtract' => 'fieldsToExtract',
        'fileOssUrl' => 'fileOssUrl',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->fieldsToExtract)) {
            Model::validateArray($this->fieldsToExtract);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->fieldsToExtract) {
            if (\is_array($this->fieldsToExtract)) {
                $res['fieldsToExtract'] = [];
                $n1 = 0;
                foreach ($this->fieldsToExtract as $item1) {
                    $res['fieldsToExtract'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['fieldsToExtract'])) {
                $model->fieldsToExtract = [];
                $n1 = 0;
                foreach ($map['fieldsToExtract'] as $item1) {
                    $model->fieldsToExtract[$n1] = fieldsToExtract::fromMap($item1);
                    ++$n1;
                }
            }
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
