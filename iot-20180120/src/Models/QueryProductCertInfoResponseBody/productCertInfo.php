<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductCertInfoResponseBody;

use AlibabaCloud\Tea\Model;

class productCertInfo extends Model
{
    /**
     * @var int
     */
    public $issueModel;
    protected $_name = [
        'issueModel' => 'IssueModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issueModel) {
            $res['IssueModel'] = $this->issueModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productCertInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IssueModel'])) {
            $model->issueModel = $map['IssueModel'];
        }

        return $model;
    }
}
