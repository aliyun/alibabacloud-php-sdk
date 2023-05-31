<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponseBody\imageRiskList;

use AlibabaCloud\Tea\Model;

class endPointList extends Model
{
    /**
     * @description An array that consists the details of the domain name in the endpoint.
     *
     * @var string[]
     */
    public $domains;

    /**
     * @description The type of the domain name in the endpoint. Valid values:
     *
     *   **internet**: Internet
     *   **intranet**: internal network
     *
     * @example internet
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'domains' => 'Domains',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endPointList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
