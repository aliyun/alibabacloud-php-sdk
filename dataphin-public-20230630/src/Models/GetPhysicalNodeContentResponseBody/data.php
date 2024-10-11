<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeContentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example select 1;
     *
     * @var string
     */
    public $codeContent;

    /**
     * @example n_232411
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'codeContent' => 'CodeContent',
        'nodeId'      => 'NodeId',
        'nodeName'    => 'NodeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeContent) {
            $res['CodeContent'] = $this->codeContent;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeContent'])) {
            $model->codeContent = $map['CodeContent'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
