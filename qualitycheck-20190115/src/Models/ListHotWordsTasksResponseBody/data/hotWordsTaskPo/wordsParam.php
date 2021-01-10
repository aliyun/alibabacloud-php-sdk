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
     * @var string
     */
    public $includes;

    /**
     * @var int
     */
    public $extraConfigId;
    protected $_name = [
        'excludes'      => 'Excludes',
        'includes'      => 'Includes',
        'extraConfigId' => 'ExtraConfigId',
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
        if (null !== $this->includes) {
            $res['Includes'] = $this->includes;
        }
        if (null !== $this->extraConfigId) {
            $res['ExtraConfigId'] = $this->extraConfigId;
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
        if (isset($map['Includes'])) {
            $model->includes = $map['Includes'];
        }
        if (isset($map['ExtraConfigId'])) {
            $model->extraConfigId = $map['ExtraConfigId'];
        }

        return $model;
    }
}
