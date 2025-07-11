<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateRenderingProjectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example du_merchant_d
     *
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $sessionAttribsShrink;
    protected $_name = [
        'description' => 'Description',
        'projectName' => 'ProjectName',
        'sessionAttribsShrink' => 'SessionAttribs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sessionAttribsShrink) {
            $res['SessionAttribs'] = $this->sessionAttribsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRenderingProjectShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SessionAttribs'])) {
            $model->sessionAttribsShrink = $map['SessionAttribs'];
        }

        return $model;
    }
}
