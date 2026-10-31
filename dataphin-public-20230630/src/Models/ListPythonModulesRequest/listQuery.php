<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListPythonModulesRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pythonModuleId;

    /**
     * @var string
     */
    public $pythonVersion;
    protected $_name = [
        'keyword' => 'Keyword',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'pythonModuleId' => 'PythonModuleId',
        'pythonVersion' => 'PythonVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pythonModuleId) {
            $res['PythonModuleId'] = $this->pythonModuleId;
        }

        if (null !== $this->pythonVersion) {
            $res['PythonVersion'] = $this->pythonVersion;
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
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PythonModuleId'])) {
            $model->pythonModuleId = $map['PythonModuleId'];
        }

        if (isset($map['PythonVersion'])) {
            $model->pythonVersion = $map['PythonVersion'];
        }

        return $model;
    }
}
