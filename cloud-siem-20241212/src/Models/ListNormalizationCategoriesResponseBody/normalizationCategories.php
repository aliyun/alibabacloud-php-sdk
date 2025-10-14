<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationCategoriesResponseBody;

use AlibabaCloud\Dara\Model;

class normalizationCategories extends Model
{
    /**
     * @var string
     */
    public $normalizationCategoryId;

    /**
     * @var string
     */
    public $normalizationCategoryName;
    protected $_name = [
        'normalizationCategoryId' => 'NormalizationCategoryId',
        'normalizationCategoryName' => 'NormalizationCategoryName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->normalizationCategoryId) {
            $res['NormalizationCategoryId'] = $this->normalizationCategoryId;
        }

        if (null !== $this->normalizationCategoryName) {
            $res['NormalizationCategoryName'] = $this->normalizationCategoryName;
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
        if (isset($map['NormalizationCategoryId'])) {
            $model->normalizationCategoryId = $map['NormalizationCategoryId'];
        }

        if (isset($map['NormalizationCategoryName'])) {
            $model->normalizationCategoryName = $map['NormalizationCategoryName'];
        }

        return $model;
    }
}
