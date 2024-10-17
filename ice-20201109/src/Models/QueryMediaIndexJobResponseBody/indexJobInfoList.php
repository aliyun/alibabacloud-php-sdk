<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaIndexJobResponseBody;

use AlibabaCloud\Tea\Model;

class indexJobInfoList extends Model
{
    /**
     * @description The end time of the indexing job.
     *
     * @example 2023-11-21 11:33:51
     *
     * @var string
     */
    public $gmtFinish;

    /**
     * @description The time when the index job was submitted.
     *
     * @example 2023-11-21 11:33:50
     *
     * @var string
     */
    public $gmtSubmit;

    /**
     * @description The index type. Valid values:
     *
     *   mm: large visual model.
     *   face: face recognition.
     *   aiLabel: smart tagging.
     *
     * @example mm
     *
     * @var string
     */
    public $indexType;

    /**
     * @description The job status. Valid values:
     *
     *   Running
     *   Success
     *   Fail
     *
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'gmtFinish' => 'GmtFinish',
        'gmtSubmit' => 'GmtSubmit',
        'indexType' => 'IndexType',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtFinish) {
            $res['GmtFinish'] = $this->gmtFinish;
        }
        if (null !== $this->gmtSubmit) {
            $res['GmtSubmit'] = $this->gmtSubmit;
        }
        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexJobInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtFinish'])) {
            $model->gmtFinish = $map['GmtFinish'];
        }
        if (isset($map['GmtSubmit'])) {
            $model->gmtSubmit = $map['GmtSubmit'];
        }
        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
