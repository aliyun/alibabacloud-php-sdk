<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeApisecSlsProjectsResponseBody extends Model
{
    /**
     * @description The names of the projects in Simple Log Service.
     *
     * @var string[]
     */
    public $projects;

    /**
     * @description The ID of the request.
     *
     * @example D7861F61-5B61-46CE-A47C-6B19****5EB0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projects' => 'Projects',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->projects) {
            $res['Projects'] = $this->projects;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApisecSlsProjectsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Projects'])) {
            if (!empty($map['Projects'])) {
                $model->projects = $map['Projects'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
