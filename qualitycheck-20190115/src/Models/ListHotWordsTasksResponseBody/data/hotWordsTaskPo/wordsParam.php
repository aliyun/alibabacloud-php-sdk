<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListHotWordsTasksResponseBody\data\hotWordsTaskPo;

use AlibabaCloud\Tea\Model;

class wordsParam extends Model
{
    /**
     * @var string
     */
    public $excludes;

    /**
     * @example 1
     *
     * @var int
     */
    public $extraConfigId;

    /**
     * @var string
     */
    public $includes;
    protected $_name = [
        'excludes'      => 'Excludes',
        'extraConfigId' => 'ExtraConfigId',
        'includes'      => 'Includes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludes) {
            $res['Excludes'] = $this->excludes;
        }
        if (null !== $this->extraConfigId) {
            $res['ExtraConfigId'] = $this->extraConfigId;
        }
        if (null !== $this->includes) {
            $res['Includes'] = $this->includes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wordsParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Excludes'])) {
            $model->excludes = $map['Excludes'];
        }
        if (isset($map['ExtraConfigId'])) {
            $model->extraConfigId = $map['ExtraConfigId'];
        }
        if (isset($map['Includes'])) {
            $model->includes = $map['Includes'];
        }

        return $model;
    }
}
