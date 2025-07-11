<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingProjectRequest\sessionAttribs;
use AlibabaCloud\Tea\Model;

class UpdateRenderingProjectRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example project-422bc38dfgh5eb44149f135ef76304f63b
     *
     * @var string
     */
    public $projectId;

    /**
     * @example idata_content
     *
     * @var string
     */
    public $projectName;

    /**
     * @var sessionAttribs
     */
    public $sessionAttribs;
    protected $_name = [
        'description' => 'Description',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'sessionAttribs' => 'SessionAttribs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sessionAttribs) {
            $res['SessionAttribs'] = null !== $this->sessionAttribs ? $this->sessionAttribs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRenderingProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SessionAttribs'])) {
            $model->sessionAttribs = sessionAttribs::fromMap($map['SessionAttribs']);
        }

        return $model;
    }
}
