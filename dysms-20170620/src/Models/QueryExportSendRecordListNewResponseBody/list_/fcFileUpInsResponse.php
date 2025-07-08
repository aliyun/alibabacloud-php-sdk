<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryExportSendRecordListNewResponseBody\list_;

use AlibabaCloud\Dara\Model;

class fcFileUpInsResponse extends Model
{
    /**
     * @var string
     */
    public $fileFeature;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $handlerStatus;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'fileFeature' => 'FileFeature',
        'fileUrl' => 'FileUrl',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'handlerStatus' => 'HandlerStatus',
        'id' => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileFeature) {
            $res['FileFeature'] = $this->fileFeature;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->handlerStatus) {
            $res['HandlerStatus'] = $this->handlerStatus;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['FileFeature'])) {
            $model->fileFeature = $map['FileFeature'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['HandlerStatus'])) {
            $model->handlerStatus = $map['HandlerStatus'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
