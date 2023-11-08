<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListNavigationByFormTypeResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNavigationByFormTypeResponseBody\result\title;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example FORM-EF6Yxxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example TPROC--X1Gxxx
     *
     * @var string
     */
    public $processCode;

    /**
     * @var title
     */
    public $title;
    protected $_name = [
        'formUuid'    => 'FormUuid',
        'processCode' => 'ProcessCode',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }
        if (null !== $this->processCode) {
            $res['ProcessCode'] = $this->processCode;
        }
        if (null !== $this->title) {
            $res['Title'] = null !== $this->title ? $this->title->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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
