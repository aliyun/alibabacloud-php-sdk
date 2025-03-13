<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase;

use AlibabaCloud\Tea\Model;

class directory extends Model
{
    /**
     * @example 2973f597c14c6f533fffdcd05c
     *
     * @var string
     */
    public $childIdentifier;

    /**
     * @example e27b8eace6501ce51cf5d56784
     *
     * @var string
     */
    public $directoryIdentifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $pathName;
    protected $_name = [
        'childIdentifier'     => 'childIdentifier',
        'directoryIdentifier' => 'directoryIdentifier',
        'name'                => 'name',
        'pathName'            => 'pathName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childIdentifier) {
            $res['childIdentifier'] = $this->childIdentifier;
        }
        if (null !== $this->directoryIdentifier) {
            $res['directoryIdentifier'] = $this->directoryIdentifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pathName) {
            $res['pathName'] = $this->pathName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return directory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['childIdentifier'])) {
            $model->childIdentifier = $map['childIdentifier'];
        }
        if (isset($map['directoryIdentifier'])) {
            $model->directoryIdentifier = $map['directoryIdentifier'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pathName'])) {
            if (!empty($map['pathName'])) {
                $model->pathName = $map['pathName'];
            }
        }

        return $model;
    }
}
