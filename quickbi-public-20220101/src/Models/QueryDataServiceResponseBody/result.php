<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceResponseBody\result\headers;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Column headers.
     *
     * @var headers[]
     */
    public $headers;

    /**
     * @description The SQL of the query request.
     *
     * @example SELECT COMPANY_T_1_.`area` AS D_AREA_2_, COMPANY_T_1_.`city` AS D_CITY_3_, SUM(COMPANY_T_1_.`profit_amt`) AS D_PROFIT_4_ FROM `quickbi_test`.`company_sales_record_copy` AS COMPANY_T_1_ WHERE COMPANY_T_1_.`area` LIKE \\"%华东%\\" GROUP BY COMPANY_T_1_.`area`, COMPANY_T_1_.`city` HAVING SUM(COMPANY_T_1_.`order_amt`) > 1 LIMIT 0, 10
     *
     * @var string
     */
    public $sql;

    /**
     * @description The queried results returned.
     *
     * @var mixed[][]
     */
    public $values;
    protected $_name = [
        'headers' => 'Headers',
        'sql' => 'Sql',
        'values' => 'Values',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['Headers'] = [];
            if (null !== $this->headers && \is_array($this->headers)) {
                $n = 0;
                foreach ($this->headers as $item) {
                    $res['Headers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                $n = 0;
                foreach ($map['Headers'] as $item) {
                    $model->headers[$n++] = null !== $item ? headers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
