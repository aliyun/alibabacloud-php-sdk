<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeCrTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @var string
     */
    public $chineseName;

    /**
     * @var string
     */
    public $englishName;

    /**
     * @var string
     */
    public $yaml;
    protected $_name = [
        'chineseName' => 'ChineseName',
        'englishName' => 'EnglishName',
        'yaml'        => 'Yaml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chineseName) {
            $res['ChineseName'] = $this->chineseName;
        }
        if (null !== $this->englishName) {
            $res['EnglishName'] = $this->englishName;
        }
        if (null !== $this->yaml) {
            $res['Yaml'] = $this->yaml;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChineseName'])) {
            $model->chineseName = $map['ChineseName'];
        }
        if (isset($map['EnglishName'])) {
            $model->englishName = $map['EnglishName'];
        }
        if (isset($map['Yaml'])) {
            $model->yaml = $map['Yaml'];
        }

        return $model;
    }
}
