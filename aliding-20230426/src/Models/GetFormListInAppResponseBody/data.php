<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormListInAppResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormListInAppResponseBody\data\title;

class data extends Model
{
    /**
     * @var string
     */
    public $creator;
    /**
     * @var string
     */
    public $formType;
    /**
     * @var string
     */
    public $formUuid;
    /**
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
        if (null !== $this->title) {
            $this->title->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Title'] = null !== $this->title ? $this->title->toArray($noStream) : $this->title;
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
