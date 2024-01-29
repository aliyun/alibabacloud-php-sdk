<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody\features;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody\relations;
use AlibabaCloud\Tea\Model;

class GetModelFeatureResponseBody extends Model
{
    /**
     * @example from feature_store_py.fs_client import FeatureStoreClient\nfrom feature_store_py.fs_project import FeatureStoreProject\nfrom feature_store_py.fs_datasource import LabelInput, MaxComputeDataSource, TrainingSetOutput\nfrom feature_store_py.fs_features import FeatureSelector\nfrom feature_store_py.fs_config import LabelInputConfig, PartitionConfig, FeatureViewConfig\nfrom feature_store_py.fs_config import TrainSetOutputConfig, EASDeployConfig\nimport datetime\nimport sys\n\ncur_day = args[\"dt\"]\nprint(\"cur_day = \", cur_day)\noffset = datetime.timedelta(days=-1)\npre_day = (datetime.datetime.strptime(cur_day, \"%Y%m%d\") + offset).strftime(\"%Y%m%d\")\nprint(\"pre_day = \", pre_day)\n\n\naccess_key_id = o.account.access_id\naccess_key_secret = o.account.secret_access_key\nfs = FeatureStoreClient(access_key_id=access_key_id, access_key_secret=access_key_secret, region=\"cn-beijing\")\ncur_project_name = \"p1\"\nproject = fs.get_project(cur_project_name)\n\nlabel_partitions = PartitionConfig(name = \"ds\", value = cur_day)\nlabel_input_config = LabelInputConfig(partition_config=label_partitions)\n\nfeature_view_1_partitions = PartitionConfig(name = \"ds\", value = pre_day)\nfeature_view_1_config = FeatureViewConfig(name = \"user_fea\",\npartition_config=feature_view_1_partitions)\n\nfeature_view_2_partitions = PartitionConfig(name = \"ds\", value = pre_day)\nfeature_view_2_config = FeatureViewConfig(name = \"seq_fea\",\npartition_config=feature_view_2_partitions)\n\nfeature_view_3_partitions = PartitionConfig(name = \"ds\", value = pre_day)\nfeature_view_3_config = FeatureViewConfig(name = \"item_fea\",\npartition_config=feature_view_3_partitions)\n\nfeature_view_config_list = [feature_view_1_config,feature_view_2_config,feature_view_3_config]\ntrain_set_partitions = PartitionConfig(name = \"ds\", value = cur_day)\ntrain_set_output_config = TrainSetOutputConfig(partition_config=train_set_partitions)\n\n\nmodel_name = \"rank_v1\"\ncur_model = project.get_model(model_name)\ntask = cur_model.export_train_set(label_input_config, feature_view_config_list, train_set_output_config)\ntask.wait()\nprint(\"task_summary = \", task.task_summary)\n
     *
     * @var string
     */
    public $exportTrainingSetTableScript;

    /**
     * @var features[]
     */
    public $features;

    /**
     * @example 2023-07-04T14:46:22.227+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2023-07-04T14:46:22.227+08:00
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example 3
     *
     * @var string
     */
    public $labelTableId;

    /**
     * @example label_table1
     *
     * @var string
     */
    public $labelTableName;

    /**
     * @example model_feature1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1231243253****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 5
     *
     * @var string
     */
    public $projectId;

    /**
     * @example project1
     *
     * @var string
     */
    public $projectName;

    /**
     * @var relations
     */
    public $relations;

    /**
     * @example 0C89F5E1-7F24-5EEC-9F05-508A39278CC8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example table2
     *
     * @var string
     */
    public $trainingSetFGTable;

    /**
     * @example table1
     *
     * @var string
     */
    public $trainingSetTable;
    protected $_name = [
        'exportTrainingSetTableScript' => 'ExportTrainingSetTableScript',
        'features'                     => 'Features',
        'gmtCreateTime'                => 'GmtCreateTime',
        'gmtModifiedTime'              => 'GmtModifiedTime',
        'labelTableId'                 => 'LabelTableId',
        'labelTableName'               => 'LabelTableName',
        'name'                         => 'Name',
        'owner'                        => 'Owner',
        'projectId'                    => 'ProjectId',
        'projectName'                  => 'ProjectName',
        'relations'                    => 'Relations',
        'requestId'                    => 'RequestId',
        'trainingSetFGTable'           => 'TrainingSetFGTable',
        'trainingSetTable'             => 'TrainingSetTable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportTrainingSetTableScript) {
            $res['ExportTrainingSetTableScript'] = $this->exportTrainingSetTableScript;
        }
        if (null !== $this->features) {
            $res['Features'] = [];
            if (null !== $this->features && \is_array($this->features)) {
                $n = 0;
                foreach ($this->features as $item) {
                    $res['Features'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->labelTableId) {
            $res['LabelTableId'] = $this->labelTableId;
        }
        if (null !== $this->labelTableName) {
            $res['LabelTableName'] = $this->labelTableName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->relations) {
            $res['Relations'] = null !== $this->relations ? $this->relations->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trainingSetFGTable) {
            $res['TrainingSetFGTable'] = $this->trainingSetFGTable;
        }
        if (null !== $this->trainingSetTable) {
            $res['TrainingSetTable'] = $this->trainingSetTable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetModelFeatureResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportTrainingSetTableScript'])) {
            $model->exportTrainingSetTableScript = $map['ExportTrainingSetTableScript'];
        }
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n               = 0;
                foreach ($map['Features'] as $item) {
                    $model->features[$n++] = null !== $item ? features::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['LabelTableId'])) {
            $model->labelTableId = $map['LabelTableId'];
        }
        if (isset($map['LabelTableName'])) {
            $model->labelTableName = $map['LabelTableName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Relations'])) {
            $model->relations = relations::fromMap($map['Relations']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrainingSetFGTable'])) {
            $model->trainingSetFGTable = $map['TrainingSetFGTable'];
        }
        if (isset($map['TrainingSetTable'])) {
            $model->trainingSetTable = $map['TrainingSetTable'];
        }

        return $model;
    }
}
