<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestSettingResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $isEnableSmartCodeReview;

    /**
     * @var string[]
     */
    public $mergeTypes;
    protected $_name = [
        'isEnableSmartCodeReview' => 'IsEnableSmartCodeReview',
        'mergeTypes'              => 'MergeTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isEnableSmartCodeReview) {
            $res['IsEnableSmartCodeReview'] = $this->isEnableSmartCodeReview;
        }
        if (null !== $this->mergeTypes) {
            $res['MergeTypes'] = $this->mergeTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsEnableSmartCodeReview'])) {
            $model->isEnableSmartCodeReview = $map['IsEnableSmartCodeReview'];
        }
        if (isset($map['MergeTypes'])) {
            if (!empty($map['MergeTypes'])) {
                $model->mergeTypes = $map['MergeTypes'];
            }
        }

        return $model;
    }
}
