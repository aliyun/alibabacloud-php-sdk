<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMappingResponseBody\liveDomainModels;

use AlibabaCloud\Tea\Model;

class liveDomainModel extends Model
{
    /**
     * @description The domain name to which the queried domain name is mapped.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The type of the queried domain name. Valid values:
     *
     *   **vhost**: main streaming domain
     *   **publish**: ingest domain
     *   **play**: sub-streaming domain
     *
     * @example play
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'domainName' => 'DomainName',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveDomainModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
