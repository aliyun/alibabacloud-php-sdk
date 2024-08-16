<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Tea\Model;

class GetDocStructureResultRequest extends Model
{
    /**
     * @example docmind-20220816-1e89d65c
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetDocStructureResultRequest
     */
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
