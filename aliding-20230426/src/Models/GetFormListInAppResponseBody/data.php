<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormListInAppResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormListInAppResponseBody\data\title;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 012345
     *
     * @var string
     */
    public $creator;

    /**
     * @example receipt
     *
     * @var string
     */
    public $formType;

    /**
     * @example FORM-BAxxxxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example 2023-02-22 15:27:07
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @var title
     */
    public $title;
    protected $_name = [
        'creator'   => 'Creator',
        'formType'  => 'FormType',
        'formUuid'  => 'FormUuid',
        'gmtCreate' => 'GmtCreate',
        'title'     => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->formType) {
            $res['FormType'] = $this->formType;
        }
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->title) {
            $res['Title'] = null !== $this->title ? $this->title->toMap() : null;
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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['FormType'])) {
            $model->formType = $map['FormType'];
        }
        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Title'])) {
            $model->title = title::fromMap($map['Title']);
        }

        return $model;
    }
}
