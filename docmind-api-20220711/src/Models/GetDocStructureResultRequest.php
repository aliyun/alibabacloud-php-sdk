<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Dara\Model;

class GetDocStructureResultRequest extends Model
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $imageStrategy;
    /**
     * @var bool
     */
    public $revealMarkdown;
    /**
     * @var bool
     */
    public $useUrlResponseBody;
    protected $_name = [
        'id'                 => 'Id',
        'imageStrategy'      => 'ImageStrategy',
        'revealMarkdown'     => 'RevealMarkdown',
        'useUrlResponseBody' => 'UseUrlResponseBody',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->imageStrategy) {
            $res['ImageStrategy'] = $this->imageStrategy;
        }

        if (null !== $this->revealMarkdown) {
            $res['RevealMarkdown'] = $this->revealMarkdown;
        }

        if (null !== $this->useUrlResponseBody) {
            $res['UseUrlResponseBody'] = $this->useUrlResponseBody;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ImageStrategy'])) {
            $model->imageStrategy = $map['ImageStrategy'];
        }

        if (isset($map['RevealMarkdown'])) {
            $model->revealMarkdown = $map['RevealMarkdown'];
        }

        if (isset($map['UseUrlResponseBody'])) {
            $model->useUrlResponseBody = $map['UseUrlResponseBody'];
        }

        return $model;
    }
}
