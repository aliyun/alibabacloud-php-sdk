<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaIndexJobResponseBody;

use AlibabaCloud\Dara\Model;

class indexJobInfoList extends Model
{
    /**
     * @var string
     */
    public $gmtFinish;
    /**
     * @var string
     */
    public $gmtSubmit;
    /**
     * @var string
     */
    public $indexType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
