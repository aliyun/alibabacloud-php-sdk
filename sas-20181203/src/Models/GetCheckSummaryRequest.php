<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetCheckSummaryRequest extends Model
{
    /**
     * @description Specifies whether to return the statistics of the check items, including the number of check items supported by the system and the number of check items available to you.
     *
     * @var bool
     */
    public $isItemStatistic;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The account ID of the resource directory.
     *
     * @example 000
     *
     * @var string
     */
    public $resourceDirectoryAccountId;

    /**
     * @description The cloud service providers.
     *
     * @var string[]
     */
    public $vendors;
    protected $_name = [
        'isItemStatistic'            => 'IsItemStatistic',
        'lang'                       => 'Lang',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'vendors'                    => 'Vendors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isItemStatistic) {
            $res['IsItemStatistic'] = $this->isItemStatistic;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->vendors) {
            $res['Vendors'] = $this->vendors;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsItemStatistic'])) {
            $model->isItemStatistic = $map['IsItemStatistic'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['Vendors'])) {
            if (!empty($map['Vendors'])) {
                $model->vendors = $map['Vendors'];
            }
        }

        return $model;
    }
}
