<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListUuidsByWebPathRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The path type of the web directory. Valid values:
     *
     *   **def**: automatically identified
     *   **customize**: manually added
     *
     * @example def
     *
     * @var string
     */
    public $type;

    /**
     * @description The path to the web directory.
     *
     * @example /root/www****
     *
     * @var string
     */
    public $webPath;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'type'        => 'Type',
        'webPath'     => 'WebPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->webPath) {
            $res['WebPath'] = $this->webPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUuidsByWebPathRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WebPath'])) {
            $model->webPath = $map['WebPath'];
        }

        return $model;
    }
}
