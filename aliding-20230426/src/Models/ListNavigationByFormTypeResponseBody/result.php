<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListNavigationByFormTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNavigationByFormTypeResponseBody\result\title;

class result extends Model
{
    /**
     * @var string
     */
    public $formUuid;

    /**
     * @var string
     */
    public $processCode;

    /**
     * @var title
     */
    public $title;
    protected $_name = [
        'formUuid' => 'FormUuid',
        'processCode' => 'ProcessCode',
        'title' => 'Title',
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
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }

        if (null !== $this->processCode) {
            $res['ProcessCode'] = $this->processCode;
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
        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }

        if (isset($map['ProcessCode'])) {
            $model->processCode = $map['ProcessCode'];
        }

        if (isset($map['Title'])) {
            $model->title = title::fromMap($map['Title']);
        }

        return $model;
    }
}
