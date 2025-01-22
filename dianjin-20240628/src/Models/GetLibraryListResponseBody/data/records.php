<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponseBody\data\records\indexSetting;

class records extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $documentCount;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $id;
    /**
     * @var indexSetting
     */
    public $indexSetting;
    /**
     * @var string
     */
    public $libraryName;
    protected $_name = [
        'description'   => 'description',
        'documentCount' => 'documentCount',
        'gmtCreate'     => 'gmtCreate',
        'gmtModified'   => 'gmtModified',
        'id'            => 'id',
        'indexSetting'  => 'indexSetting',
        'libraryName'   => 'libraryName',
    ];

    public function validate()
    {
        if (null !== $this->indexSetting) {
            $this->indexSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->documentCount) {
            $res['documentCount'] = $this->documentCount;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->indexSetting) {
            $res['indexSetting'] = null !== $this->indexSetting ? $this->indexSetting->toArray($noStream) : $this->indexSetting;
        }

        if (null !== $this->libraryName) {
            $res['libraryName'] = $this->libraryName;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['documentCount'])) {
            $model->documentCount = $map['documentCount'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['indexSetting'])) {
            $model->indexSetting = indexSetting::fromMap($map['indexSetting']);
        }

        if (isset($map['libraryName'])) {
            $model->libraryName = $map['libraryName'];
        }

        return $model;
    }
}
