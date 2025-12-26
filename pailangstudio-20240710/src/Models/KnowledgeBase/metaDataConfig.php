<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBase;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBase\metaDataConfig\customMetaData;

class metaDataConfig extends Model
{
    /**
     * @var customMetaData[]
     */
    public $customMetaData;
    protected $_name = [
        'customMetaData' => 'CustomMetaData',
    ];

    public function validate()
    {
        if (\is_array($this->customMetaData)) {
            Model::validateArray($this->customMetaData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customMetaData) {
            if (\is_array($this->customMetaData)) {
                $res['CustomMetaData'] = [];
                $n1 = 0;
                foreach ($this->customMetaData as $item1) {
                    $res['CustomMetaData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CustomMetaData'])) {
            if (!empty($map['CustomMetaData'])) {
                $model->customMetaData = [];
                $n1 = 0;
                foreach ($map['CustomMetaData'] as $item1) {
                    $model->customMetaData[$n1] = customMetaData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
