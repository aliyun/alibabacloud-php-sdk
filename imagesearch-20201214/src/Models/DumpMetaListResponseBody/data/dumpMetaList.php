<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaListResponseBody\data;

use AlibabaCloud\Tea\Model;

class dumpMetaList extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $code;

    /**
     * @example 500
     *
     * @var int
     */
    public $id;

    /**
     * @example https://imagesearchname.oss-cn-shanghai.aliyuncs.com/xxx
     *
     * @var string
     */
    public $metaUrl;

    /**
     * @example success
     *
     * @var string
     */
    public $msg;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 1629095713000
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @example 1629095760000
     *
     * @var int
     */
    public $utcModified;
    protected $_name = [
        'code'        => 'Code',
        'id'          => 'Id',
        'metaUrl'     => 'MetaUrl',
        'msg'         => 'Msg',
        'status'      => 'Status',
        'utcCreate'   => 'UtcCreate',
        'utcModified' => 'UtcModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->metaUrl) {
            $res['MetaUrl'] = $this->metaUrl;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dumpMetaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MetaUrl'])) {
            $model->metaUrl = $map['MetaUrl'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }

        return $model;
    }
}
