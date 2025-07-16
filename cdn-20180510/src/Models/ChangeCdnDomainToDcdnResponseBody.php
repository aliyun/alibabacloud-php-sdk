<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class ChangeCdnDomainToDcdnResponseBody extends Model
{
    /**
     * @description The content of the migration instructions.
     *
     * @example {
     * "The_domain_name_quota_for_the_target_account_has_reached_the_upper_limit": true,
     * "Domain_name_requires_node2_architecture_to_be_enabled": true,
     * "Internal_customer_domain_name_migration_prohibited": true,
     * "Prohibit_the_migration_of_important_customer_domain_names": true,
     * "Protected_domain_names_are_prohibited_from_migration": true,
     * "Domain_names_accessed_through_TopDomain_are_prohibited_from_migration": true,
     * "Prohibit_migration_of_customer_domain_names_for_integrated_access": true
     * }
     *
     * @var mixed[]
     */
    public $content;

    /**
     * @description The request ID.
     *
     * @example E6172599-7DA7-5471-9D22-359A4E0C9B94
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'content' => 'Content',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeCdnDomainToDcdnResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
