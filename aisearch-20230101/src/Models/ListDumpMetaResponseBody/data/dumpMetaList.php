<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\ListDumpMetaResponseBody\data;

use AlibabaCloud\Tea\Model;

class dumpMetaList extends Model
{
    /**
     * @example 45
     *
     * @var int
     */
    public $id;

    /**
     * @example https://xxx.com
     *
     * @var string
     */
    public $metaUrl;

    /**
     * @var string
     */
    public $msg;

    /**
     * @example PROCESSING
     *
     * @var string
     */
    public $status;

    /**
     * @example 2023-02-09T02:15:46.911+00:00
     *
     * @var string
     */
    public $utcCreateTime;

    /**
     * @example 2023-02-09T02:15:46.911+00:00
     *
     * @var string
     */
    public $utcUpdateTime;
    protected $_name = [
        'id'            => 'Id',
        'metaUrl'       => 'MetaUrl',
        'msg'           => 'Msg',
        'status'        => 'Status',
        'utcCreateTime' => 'UtcCreateTime',
        'utcUpdateTime' => 'UtcUpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->utcCreateTime) {
            $res['UtcCreateTime'] = $this->utcCreateTime;
        }
        if (null !== $this->utcUpdateTime) {
            $res['UtcUpdateTime'] = $this->utcUpdateTime;
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
        if (isset($map['UtcCreateTime'])) {
            $model->utcCreateTime = $map['UtcCreateTime'];
        }
        if (isset($map['UtcUpdateTime'])) {
            $model->utcUpdateTime = $map['UtcUpdateTime'];
        }

        return $model;
    }
}
