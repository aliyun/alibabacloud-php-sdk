<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListQuickQueryResponseBody\data;

use AlibabaCloud\Tea\Model;

class quickQueryList extends Model
{
    /**
     * @description The alias of the saved search.
     *
     * @example no_1_created_search_used_for_dispaly_ip
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The query statement corresponding to the saved search.
     *
     * @example * and SamplerAddress:\"172.18.1.1\" and OutIf:\"105\"
     *
     * @var string
     */
    public $query;

    /**
     * @description The name of the saved search.
     *
     * @example data_analysis
     *
     * @var string
     */
    public $searchName;
    protected $_name = [
        'displayName' => 'DisplayName',
        'query'       => 'Query',
        'searchName'  => 'SearchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quickQueryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        return $model;
    }
}
