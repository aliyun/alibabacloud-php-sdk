<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListHoneypotRequest extends Model
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
     * @description The IDs of honeypots.
     *
     * @var string[]
     */
    public $honeypotIds;

    /**
     * @description The name of the honeypot.
     *
     * @example mx-rouyi
     *
     * @var string
     */
    public $honeypotName;

    /**
     * @description The ID of the management node to which the honeypot belongs.
     *
     * @example a882e590-b87b-45a6-87b9-d0a3e5a0****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The name of the management node to which the honeypot belongs.
     *
     * @example honeypot_master
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'honeypotIds'  => 'HoneypotIds',
        'honeypotName' => 'HoneypotName',
        'nodeId'       => 'NodeId',
        'nodeName'     => 'NodeName',
        'pageSize'     => 'PageSize',
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
        if (null !== $this->honeypotIds) {
            $res['HoneypotIds'] = $this->honeypotIds;
        }
        if (null !== $this->honeypotName) {
            $res['HoneypotName'] = $this->honeypotName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHoneypotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['HoneypotIds'])) {
            if (!empty($map['HoneypotIds'])) {
                $model->honeypotIds = $map['HoneypotIds'];
            }
        }
        if (isset($map['HoneypotName'])) {
            $model->honeypotName = $map['HoneypotName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
