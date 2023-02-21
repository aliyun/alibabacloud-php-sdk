<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcChangeRecordResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $afterContent;

    /**
     * @var string
     */
    public $beforeContent;

    /**
     * @example 2002-12-11
     *
     * @var string
     */
    public $changeDate;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'afterContent'  => 'AfterContent',
        'beforeContent' => 'BeforeContent',
        'changeDate'    => 'ChangeDate',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterContent) {
            $res['AfterContent'] = $this->afterContent;
        }
        if (null !== $this->beforeContent) {
            $res['BeforeContent'] = $this->beforeContent;
        }
        if (null !== $this->changeDate) {
            $res['ChangeDate'] = $this->changeDate;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterContent'])) {
            $model->afterContent = $map['AfterContent'];
        }
        if (isset($map['BeforeContent'])) {
            $model->beforeContent = $map['BeforeContent'];
        }
        if (isset($map['ChangeDate'])) {
            $model->changeDate = $map['ChangeDate'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
