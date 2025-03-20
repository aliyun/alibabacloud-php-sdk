<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CheckSiteProjectNameRequest extends Model
{
    /**
     * @description The name of the real-time log delivery task.
     *
     * This parameter is required.
     *
     * @example user_log
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * @example 12312312213212
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'projectName' => 'ProjectName',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckSiteProjectNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
