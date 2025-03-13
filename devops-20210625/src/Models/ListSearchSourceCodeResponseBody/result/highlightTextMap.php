<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchSourceCodeResponseBody\result;

use AlibabaCloud\Tea\Model;

class highlightTextMap extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $clob;

    /**
     * @example test.java
     *
     * @var string
     */
    public $fileName;

    /**
     * @example java
     *
     * @var string
     */
    public $language;

    /**
     * @example 60de7a6852743a5162b5f957
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return highlightTextMap
     */
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
