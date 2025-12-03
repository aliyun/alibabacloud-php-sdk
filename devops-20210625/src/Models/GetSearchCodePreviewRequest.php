<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class GetSearchCodePreviewRequest extends Model
{
    /**
     * @var string
     */
    public $docId;

    /**
     * @var bool
     */
    public $isDsl;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'docId' => 'docId',
        'isDsl' => 'isDsl',
        'keyword' => 'keyword',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }

        if (null !== $this->isDsl) {
            $res['isDsl'] = $this->isDsl;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
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
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }

        if (isset($map['isDsl'])) {
            $model->isDsl = $map['isDsl'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
