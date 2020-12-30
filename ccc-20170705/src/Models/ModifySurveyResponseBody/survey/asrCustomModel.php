<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ModifySurveyResponseBody\survey;

use AlibabaCloud\Tea\Model;

class asrCustomModel extends Model
{
    /**
     * @var int
     */
    public $customModelStatus;

    /**
     * @var string
     */
    public $corpora;
    protected $_name = [
        'customModelStatus' => 'CustomModelStatus',
        'corpora'           => 'Corpora',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customModelStatus) {
            $res['CustomModelStatus'] = $this->customModelStatus;
        }
        if (null !== $this->corpora) {
            $res['Corpora'] = $this->corpora;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asrCustomModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomModelStatus'])) {
            $model->customModelStatus = $map['CustomModelStatus'];
        }
        if (isset($map['Corpora'])) {
            $model->corpora = $map['Corpora'];
        }

        return $model;
    }
}
