<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceSchemeMatchResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceSchemeMatchResponseBody\data\schemeContent;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var schemeContent
     */
    public $schemeContent;

    /**
     * @var int
     */
    public $schemeId;
    protected $_name = [
        'sceneCode'     => 'SceneCode',
        'schemeContent' => 'SchemeContent',
        'schemeId'      => 'SchemeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->schemeContent) {
            $res['SchemeContent'] = null !== $this->schemeContent ? $this->schemeContent->toMap() : null;
        }
        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
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
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['SchemeContent'])) {
            $model->schemeContent = schemeContent::fromMap($map['SchemeContent']);
        }
        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }

        return $model;
    }
}
