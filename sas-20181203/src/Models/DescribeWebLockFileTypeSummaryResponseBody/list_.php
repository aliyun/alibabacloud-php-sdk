<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockFileTypeSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The number of attempts.
     *
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description The type of the protected file. Valid values:
     *
     *   **php**: PHP file
     *   **jsp**: JSP file
     *   **asp**: ASP file
     *   **aspx**: ASPX file
     *   **js**: JS file
     *   **cgi**: CGI file
     *   **html**: HTML file
     *   **htm**: HTM file
     *   **xml**: XML file
     *   **shtml**: SHTML file
     *   **shtm**: SHTM file
     *   **jpg**: JPG file
     *   **gif**: GIF file
     *   **png**: PNG file
     *
     * @example jsp
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'count' => 'Count',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
