<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogMetaResponseBody;

use AlibabaCloud\Tea\Model;

class logMetaList extends Model
{
    /**
     * @example host
     *
     * @var string
     */
    public $category;

    /**
     * @example -1
     *
     * @var int
     */
    public $hotTtl;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example Login
     *
     * @var string
     */
    public $logDesc;

    /**
     * @description Queries the configurations of the log analysis feature provided by Security Center.
     *
     * @example aegis-log-login
     *
     * @var string
     */
    public $logStore;

    /**
     * @example aegis-log
     *
     * @var string
     */
    public $project;

    /**
     * @description The configurations of the log analysis feature.
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @example aegis-log-login
     *
     * @var string
     */
    public $topic;

    /**
     * @example 180
     *
     * @var int
     */
    public $ttl;

    /**
     * @example aegis-log-network
     *
     * @var string
     */
    public $userLogStore;

    /**
     * @description DescribeLogMeta
     *
     * @example sasnew-log-XXXX-cn-hangzhou
     *
     * @var string
     */
    public $userProject;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $userRegion;
    protected $_name = [
        'category'     => 'Category',
        'hotTtl'       => 'HotTtl',
        'logDesc'      => 'LogDesc',
        'logStore'     => 'LogStore',
        'project'      => 'Project',
        'status'       => 'Status',
        'topic'        => 'Topic',
        'ttl'          => 'Ttl',
        'userLogStore' => 'UserLogStore',
        'userProject'  => 'UserProject',
        'userRegion'   => 'UserRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->hotTtl) {
            $res['HotTtl'] = $this->hotTtl;
        }
        if (null !== $this->logDesc) {
            $res['LogDesc'] = $this->logDesc;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->userLogStore) {
            $res['UserLogStore'] = $this->userLogStore;
        }
        if (null !== $this->userProject) {
            $res['UserProject'] = $this->userProject;
        }
        if (null !== $this->userRegion) {
            $res['UserRegion'] = $this->userRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logMetaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['HotTtl'])) {
            $model->hotTtl = $map['HotTtl'];
        }
        if (isset($map['LogDesc'])) {
            $model->logDesc = $map['LogDesc'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['UserLogStore'])) {
            $model->userLogStore = $map['UserLogStore'];
        }
        if (isset($map['UserProject'])) {
            $model->userProject = $map['UserProject'];
        }
        if (isset($map['UserRegion'])) {
            $model->userRegion = $map['UserRegion'];
        }

        return $model;
    }
}
