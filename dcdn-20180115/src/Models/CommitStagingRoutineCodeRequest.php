<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CommitStagingRoutineCodeRequest extends Model
{
    /**
     * @description The description of the code version.
     *
     * @example Hello World
     *
     * @var string
     */
    public $codeDescription;

    /**
     * @description The name of the routine. The name must be unique among the routines that belong to the same Alibaba Cloud account.
     *
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'codeDescription' => 'CodeDescription',
        'name'            => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeDescription) {
            $res['CodeDescription'] = $this->codeDescription;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommitStagingRoutineCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeDescription'])) {
            $model->codeDescription = $map['CodeDescription'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
