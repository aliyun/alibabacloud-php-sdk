<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Dara\Model;

class DeleteSymRecordsRequest extends Model
{
    /**
     * @var string[]
     */
    public $appVersions;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var int
     */
    public $fileType;
    protected $_name = [
        'appVersions' => 'appVersions',
        'dataSourceId' => 'dataSourceId',
        'fileType' => 'fileType',
    ];

    public function validate()
    {
        if (\is_array($this->appVersions)) {
            Model::validateArray($this->appVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appVersions) {
            if (\is_array($this->appVersions)) {
                $res['appVersions'] = [];
                $n1 = 0;
                foreach ($this->appVersions as $item1) {
                    $res['appVersions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
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
        if (isset($map['appVersions'])) {
            if (!empty($map['appVersions'])) {
                $model->appVersions = [];
                $n1 = 0;
                foreach ($map['appVersions'] as $item1) {
                    $model->appVersions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }

        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }

        return $model;
    }
}
