<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNoticeConfigResponseBody;

use AlibabaCloud\Tea\Model;

class noticeConfigList extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $route;

    /**
     * @var int
     */
    public $timeLimit;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'route'       => 'Route',
        'timeLimit'   => 'TimeLimit',
        'aliUid'      => 'AliUid',
        'project'     => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->route) {
            $res['Route'] = $this->route;
        }
        if (null !== $this->timeLimit) {
            $res['TimeLimit'] = $this->timeLimit;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return noticeConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Route'])) {
            $model->route = $map['Route'];
        }
        if (isset($map['TimeLimit'])) {
            $model->timeLimit = $map['TimeLimit'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
