<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigIndexResponseBody\configGroups\configGroup\configPaths;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigIndexResponseBody\configGroups\configGroup\configPaths\configPath\configOptions;
use AlibabaCloud\Tea\Model;

class configPath extends Model
{
    /**
     * @var string
     */
    public $pathName;

    /**
     * @var bool
     */
    public $hiddenPath;

    /**
     * @var configOptions
     */
    public $configOptions;

    /**
     * @var string
     */
    public $pathLabel;
    protected $_name = [
        'pathName'      => 'PathName',
        'hiddenPath'    => 'HiddenPath',
        'configOptions' => 'ConfigOptions',
        'pathLabel'     => 'PathLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }
        if (null !== $this->hiddenPath) {
            $res['HiddenPath'] = $this->hiddenPath;
        }
        if (null !== $this->configOptions) {
            $res['ConfigOptions'] = null !== $this->configOptions ? $this->configOptions->toMap() : null;
        }
        if (null !== $this->pathLabel) {
            $res['PathLabel'] = $this->pathLabel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configPath
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }
        if (isset($map['HiddenPath'])) {
            $model->hiddenPath = $map['HiddenPath'];
        }
        if (isset($map['ConfigOptions'])) {
            $model->configOptions = configOptions::fromMap($map['ConfigOptions']);
        }
        if (isset($map['PathLabel'])) {
            $model->pathLabel = $map['PathLabel'];
        }

        return $model;
    }
}
