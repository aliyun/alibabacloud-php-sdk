<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\userAffiliateList;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @example test_project_id
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectTitle;

    /**
     * @example test_third_part_project_id
     *
     * @var string
     */
    public $thirdpartProjectId;
    protected $_name = [
        'projectId'          => 'project_id',
        'projectTitle'       => 'project_title',
        'thirdpartProjectId' => 'thirdpart_project_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
        }
        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
        }
        if (null !== $this->thirdpartProjectId) {
            $res['thirdpart_project_id'] = $this->thirdpartProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['project_id'])) {
            $model->projectId = $map['project_id'];
        }
        if (isset($map['project_title'])) {
            $model->projectTitle = $map['project_title'];
        }
        if (isset($map['thirdpart_project_id'])) {
            $model->thirdpartProjectId = $map['thirdpart_project_id'];
        }

        return $model;
    }
}
