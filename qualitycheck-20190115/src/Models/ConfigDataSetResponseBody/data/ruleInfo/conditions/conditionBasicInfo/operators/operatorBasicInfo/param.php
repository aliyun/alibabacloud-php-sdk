<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo\conditions\conditionBasicInfo\operators\operatorBasicInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo\conditions\conditionBasicInfo\operators\operatorBasicInfo\param\keywords;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @var bool
     */
    public $inSentence;

    /**
     * @var keywords
     */
    public $keywords;
    protected $_name = [
        'inSentence' => 'InSentence',
        'keywords'   => 'Keywords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inSentence) {
            $res['InSentence'] = $this->inSentence;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = null !== $this->keywords ? $this->keywords->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InSentence'])) {
            $model->inSentence = $map['InSentence'];
        }
        if (isset($map['Keywords'])) {
            $model->keywords = keywords::fromMap($map['Keywords']);
        }

        return $model;
    }
}
