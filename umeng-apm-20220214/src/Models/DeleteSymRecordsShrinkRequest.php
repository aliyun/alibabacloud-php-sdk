<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Dara\Model;

class DeleteSymRecordsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appVersionsShrink;
    /**
     * @var string
     */
    public $dataSourceId;
    /**
     * @var int
     */
    public $fileType;
    protected $_name = [
        'appVersionsShrink' => 'appVersions',
        'dataSourceId'      => 'dataSourceId',
        'fileType'          => 'fileType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appVersionsShrink) {
            $res['appVersions'] = $this->appVersionsShrink;
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
            $model->appVersionsShrink = $map['appVersions'];
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
