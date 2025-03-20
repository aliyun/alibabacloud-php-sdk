<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CheckSiteNameResponseBody extends Model
{
    /**
     * @description The description of the verification result. Valid values:
     *
     *   **success**: The verification is successful.
     *   **Site.AlreadyExist**: The website domain name has already been added.
     *   **Site.InvalidName**: Invalid website domain name.
     *   **Site.SubSiteUnavailable**: Subdomains are not allowed.
     *   **Site.InternalError**: An internal error occurs.
     *
     * @example success
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether a subdomain is specified. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $isSubSite;

    /**
     * @description The verification message.
     *
     * @var string
     */
    public $messeage;

    /**
     * @description Indicates whether the verification passed.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $passed;

    /**
     * @description The request ID.
     *
     * @example CB1A380B-09F0-41BB-280B-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'description' => 'Description',
        'isSubSite' => 'IsSubSite',
        'messeage' => 'Messeage',
        'passed' => 'Passed',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isSubSite) {
            $res['IsSubSite'] = $this->isSubSite;
        }
        if (null !== $this->messeage) {
            $res['Messeage'] = $this->messeage;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckSiteNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsSubSite'])) {
            $model->isSubSite = $map['IsSubSite'];
        }
        if (isset($map['Messeage'])) {
            $model->messeage = $map['Messeage'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
