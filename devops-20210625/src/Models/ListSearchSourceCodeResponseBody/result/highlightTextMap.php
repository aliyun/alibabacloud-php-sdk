<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchSourceCodeResponseBody\result;

use AlibabaCloud\Dara\Model;

class highlightTextMap extends Model
{
    /**
     * @var string
     */
    public $clob;
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'clob'           => 'clob',
        'fileName'       => 'fileName',
        'language'       => 'language',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clob) {
            $res['clob'] = $this->clob;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
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
        if (isset($map['clob'])) {
            $model->clob = $map['clob'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
