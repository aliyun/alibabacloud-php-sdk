<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateSurveyResponseBody\survey;

use AlibabaCloud\Tea\Model;

class asrCustomModel extends Model
{
    /**
     * @var string
     */
    public $corpora;

    /**
     * @var int
     */
    public $customModelStatus;
    protected $_name = [
        'corpora'           => 'Corpora',
        'customModelStatus' => 'CustomModelStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpora) {
            $res['Corpora'] = $this->corpora;
        }
        if (null !== $this->customModelStatus) {
            $res['CustomModelStatus'] = $this->customModelStatus;
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
        if (isset($map['Corpora'])) {
            $model->corpora = $map['Corpora'];
        }
        if (isset($map['CustomModelStatus'])) {
            $model->customModelStatus = $map['CustomModelStatus'];
        }

        return $model;
    }
}
